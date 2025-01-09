<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeRulesPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $rulesPackageArns
 * @property 'EN_US' $locale
 */
class DescribeRulesPackagesRequest extends Request
{
    /**
     * @param array{
     *     rulesPackageArns: list<string>,
     *     locale?: 'EN_US'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
