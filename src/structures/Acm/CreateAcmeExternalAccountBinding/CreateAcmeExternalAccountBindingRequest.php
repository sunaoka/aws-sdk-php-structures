<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeExternalAccountBinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IdempotencyToken
 * @property string $AcmeEndpointArn
 * @property string $RoleArn
 * @property Shapes\Expiration|null $Expiration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAcmeExternalAccountBindingRequest extends Request
{
    /**
     * @param array{
     *     IdempotencyToken?: string|null,
     *     AcmeEndpointArn: string,
     *     RoleArn: string,
     *     Expiration?: Shapes\Expiration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
