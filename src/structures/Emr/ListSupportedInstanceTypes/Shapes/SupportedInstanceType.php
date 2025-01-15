<?php

namespace Sunaoka\Aws\Structures\Emr\ListSupportedInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property float|null $MemoryGB
 * @property int|null $StorageGB
 * @property int|null $VCPU
 * @property bool|null $Is64BitsOnly
 * @property string|null $InstanceFamilyId
 * @property bool|null $EbsOptimizedAvailable
 * @property bool|null $EbsOptimizedByDefault
 * @property int|null $NumberOfDisks
 * @property bool|null $EbsStorageOnly
 * @property string|null $Architecture
 */
class SupportedInstanceType extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     MemoryGB?: float|null,
     *     StorageGB?: int|null,
     *     VCPU?: int|null,
     *     Is64BitsOnly?: bool|null,
     *     InstanceFamilyId?: string|null,
     *     EbsOptimizedAvailable?: bool|null,
     *     EbsOptimizedByDefault?: bool|null,
     *     NumberOfDisks?: int|null,
     *     EbsStorageOnly?: bool|null,
     *     Architecture?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
