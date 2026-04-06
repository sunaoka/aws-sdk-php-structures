<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidStorageOptions>|null $Storage
 * @property list<AvailableProcessorFeature>|null $ValidProcessorFeatures
 * @property bool|null $SupportsDedicatedLogVolume
 * @property ValidAdditionalStorageOptions|null $AdditionalStorage
 */
class ValidDBInstanceModificationsMessage extends Shape
{
    /**
     * @param array{
     *     Storage?: list<ValidStorageOptions>|null,
     *     ValidProcessorFeatures?: list<AvailableProcessorFeature>|null,
     *     SupportsDedicatedLogVolume?: bool|null,
     *     AdditionalStorage?: ValidAdditionalStorageOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
