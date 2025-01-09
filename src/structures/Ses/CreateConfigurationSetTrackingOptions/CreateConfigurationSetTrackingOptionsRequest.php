<?php

namespace Sunaoka\Aws\Structures\Ses\CreateConfigurationSetTrackingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\TrackingOptions $TrackingOptions
 */
class CreateConfigurationSetTrackingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TrackingOptions: Shapes\TrackingOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
