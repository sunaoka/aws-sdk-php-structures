<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeDomainValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IdempotencyToken
 * @property string $AcmeEndpointArn
 * @property string $DomainName
 * @property Shapes\PrevalidationOptions $PrevalidationOptions
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAcmeDomainValidationRequest extends Request
{
    /**
     * @param array{
     *     IdempotencyToken?: string|null,
     *     AcmeEndpointArn: string,
     *     DomainName: string,
     *     PrevalidationOptions: Shapes\PrevalidationOptions,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
