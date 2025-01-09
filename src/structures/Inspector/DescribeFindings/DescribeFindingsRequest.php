<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingArns
 * @property 'EN_US' $locale
 */
class DescribeFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingArns: list<string>,
     *     locale?: 'EN_US'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
