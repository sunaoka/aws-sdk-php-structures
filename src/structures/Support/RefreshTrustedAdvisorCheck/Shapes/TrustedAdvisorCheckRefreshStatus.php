<?php

namespace Sunaoka\Aws\Structures\Support\RefreshTrustedAdvisorCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $checkId
 * @property string $status
 * @property int $millisUntilNextRefreshable
 */
class TrustedAdvisorCheckRefreshStatus extends Shape
{
    /**
     * @param array{
     *     checkId: string,
     *     status: string,
     *     millisUntilNextRefreshable: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
