<?php

namespace Sunaoka\Aws\Structures\Iam\GetHumanReadableSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntityArn
 * @property string|null $Locale
 */
class GetHumanReadableSummaryRequest extends Request
{
    /**
     * @param array{
     *     EntityArn: string,
     *     Locale?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
