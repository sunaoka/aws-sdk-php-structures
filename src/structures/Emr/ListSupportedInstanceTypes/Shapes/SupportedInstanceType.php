<?php

namespace Sunaoka\Aws\Structures\Emr\ListSupportedInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property float $MemoryGB
 * @property int $StorageGB
 * @property int $VCPU
 * @property bool $Is64BitsOnly
 * @property string $InstanceFamilyId
 * @property bool $EbsOptimizedAvailable
 * @property bool $EbsOptimizedByDefault
 * @property int $NumberOfDisks
 * @property bool $EbsStorageOnly
 * @property string $Architecture
 */
class SupportedInstanceType extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     MemoryGB?: float,
     *     StorageGB?: int,
     *     VCPU?: int,
     *     Is64BitsOnly?: bool,
     *     InstanceFamilyId?: string,
     *     EbsOptimizedAvailable?: bool,
     *     EbsOptimizedByDefault?: bool,
     *     NumberOfDisks?: int,
     *     EbsStorageOnly?: bool,
     *     Architecture?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
