<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateConfigurationSetRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
