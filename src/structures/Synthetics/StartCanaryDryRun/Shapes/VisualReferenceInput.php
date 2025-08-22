<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanaryDryRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BaseScreenshot>|null $BaseScreenshots
 * @property string $BaseCanaryRunId
 * @property 'CHROME'|'FIREFOX'|null $BrowserType
 */
class VisualReferenceInput extends Shape
{
    /**
     * @param array{
     *     BaseScreenshots?: list<BaseScreenshot>|null,
     *     BaseCanaryRunId: string,
     *     BrowserType?: 'CHROME'|'FIREFOX'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
