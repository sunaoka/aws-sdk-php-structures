<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceProfileDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateVoiceProfileDomainRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ServerSideEncryptionConfiguration: Shapes\ServerSideEncryptionConfiguration,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
