<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeRulesPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $rulesPackageArns
 * @property 'EN_US'|null $locale
 */
class DescribeRulesPackagesRequest extends Request
{
    /**
     * @param array{
     *     rulesPackageArns: list<string>,
     *     locale?: 'EN_US'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
