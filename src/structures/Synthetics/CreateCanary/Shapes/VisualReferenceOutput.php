<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BaseScreenshot>|null $BaseScreenshots
 * @property string|null $BaseCanaryRunId
 * @property 'CHROME'|'FIREFOX'|null $BrowserType
 */
class VisualReferenceOutput extends Shape
{
    /**
     * @param array{
     *     BaseScreenshots?: list<BaseScreenshot>|null,
     *     BaseCanaryRunId?: string|null,
     *     BrowserType?: 'CHROME'|'FIREFOX'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
