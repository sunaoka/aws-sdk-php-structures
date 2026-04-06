<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAccountPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property list<string> $supportedRegions
 * @property string|null $awsAccountName
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     awsAccountId: string,
     *     supportedRegions: list<string>,
     *     awsAccountName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
