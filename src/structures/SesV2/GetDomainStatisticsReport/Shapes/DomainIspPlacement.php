<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IspName
 * @property int $InboxRawCount
 * @property int $SpamRawCount
 * @property double $InboxPercentage
 * @property double $SpamPercentage
 */
class DomainIspPlacement extends Shape
{
    /**
     * @param array{
     *     IspName?: string,
     *     InboxRawCount?: int,
     *     SpamRawCount?: int,
     *     InboxPercentage?: double,
     *     SpamPercentage?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
