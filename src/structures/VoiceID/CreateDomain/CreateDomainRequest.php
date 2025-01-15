<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $Name
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Name: string,
     *     ServerSideEncryptionConfiguration: Shapes\ServerSideEncryptionConfiguration,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
