<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SectionId
 * @property SectionLayoutConfiguration $Layout
 * @property SectionStyle|null $Style
 */
class HeaderFooterSectionConfiguration extends Shape
{
    /**
     * @param array{
     *     SectionId: string,
     *     Layout: SectionLayoutConfiguration,
     *     Style?: SectionStyle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
