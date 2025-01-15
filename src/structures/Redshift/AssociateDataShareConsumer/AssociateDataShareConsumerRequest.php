<?php

namespace Sunaoka\Aws\Structures\Redshift\AssociateDataShareConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 * @property bool|null $AssociateEntireAccount
 * @property string|null $ConsumerArn
 * @property string|null $ConsumerRegion
 * @property bool|null $AllowWrites
 */
class AssociateDataShareConsumerRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn: string,
     *     AssociateEntireAccount?: bool|null,
     *     ConsumerArn?: string|null,
     *     ConsumerRegion?: string|null,
     *     AllowWrites?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
