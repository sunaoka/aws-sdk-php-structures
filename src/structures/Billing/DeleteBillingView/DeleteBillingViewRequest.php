<?php

namespace Sunaoka\Aws\Structures\Billing\DeleteBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property bool|null $force
 */
class DeleteBillingViewRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
