<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property string $Name
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     Name: string,
     *     ServerSideEncryptionConfiguration: Shapes\ServerSideEncryptionConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
