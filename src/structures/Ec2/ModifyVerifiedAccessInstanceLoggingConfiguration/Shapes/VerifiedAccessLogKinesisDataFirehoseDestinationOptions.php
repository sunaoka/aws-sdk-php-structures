<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $DeliveryStream
 */
class VerifiedAccessLogKinesisDataFirehoseDestinationOptions extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     DeliveryStream?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
