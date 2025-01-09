<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidStorageOptions> $Storage
 * @property list<AvailableProcessorFeature> $ValidProcessorFeatures
 * @property bool $SupportsDedicatedLogVolume
 */
class ValidDBInstanceModificationsMessage extends Shape
{
    /**
     * @param array{
     *     Storage?: list<ValidStorageOptions>,
     *     ValidProcessorFeatures?: list<AvailableProcessorFeature>,
     *     SupportsDedicatedLogVolume?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
