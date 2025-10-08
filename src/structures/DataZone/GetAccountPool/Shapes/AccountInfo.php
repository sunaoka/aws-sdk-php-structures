<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAccountPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string|null $awsAccountName
 * @property list<string> $supportedRegions
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     awsAccountId: string,
     *     awsAccountName?: string|null,
     *     supportedRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
