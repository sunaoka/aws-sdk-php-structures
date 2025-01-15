<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IspName
 * @property int|null $InboxRawCount
 * @property int|null $SpamRawCount
 * @property double|null $InboxPercentage
 * @property double|null $SpamPercentage
 */
class DomainIspPlacement extends Shape
{
    /**
     * @param array{
     *     IspName?: string|null,
     *     InboxRawCount?: int|null,
     *     SpamRawCount?: int|null,
     *     InboxPercentage?: double|null,
     *     SpamPercentage?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
