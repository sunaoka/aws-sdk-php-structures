<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\TrackingOptions|null $TrackingOptions
 * @property Shapes\DeliveryOptions|null $DeliveryOptions
 * @property Shapes\ReputationOptions|null $ReputationOptions
 * @property Shapes\SendingOptions|null $SendingOptions
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\SuppressionOptions|null $SuppressionOptions
 * @property Shapes\VdmOptions|null $VdmOptions
 * @property Shapes\ArchivingOptions|null $ArchivingOptions
 */
class CreateConfigurationSetRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TrackingOptions?: Shapes\TrackingOptions|null,
     *     DeliveryOptions?: Shapes\DeliveryOptions|null,
     *     ReputationOptions?: Shapes\ReputationOptions|null,
     *     SendingOptions?: Shapes\SendingOptions|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SuppressionOptions?: Shapes\SuppressionOptions|null,
     *     VdmOptions?: Shapes\VdmOptions|null,
     *     ArchivingOptions?: Shapes\ArchivingOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
