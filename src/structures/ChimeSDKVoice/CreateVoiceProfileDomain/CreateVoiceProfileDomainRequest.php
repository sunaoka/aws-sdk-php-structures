<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceProfileDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVoiceProfileDomainRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ServerSideEncryptionConfiguration: Shapes\ServerSideEncryptionConfiguration,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
