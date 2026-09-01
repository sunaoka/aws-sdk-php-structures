<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSupportedLanguages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $issueType
 * @property string $serviceCode
 * @property string $categoryCode
 * @property bool|null $dryRun
 */
class DescribeSupportedLanguagesRequest extends Request
{
    /**
     * @param array{
     *     issueType: string,
     *     serviceCode: string,
     *     categoryCode: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
