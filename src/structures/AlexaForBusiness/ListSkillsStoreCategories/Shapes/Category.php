<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $CategoryId
 * @property string|null $CategoryName
 */
class Category extends Shape
{
    /**
     * @param array{
     *     CategoryId?: int<1, max>|null,
     *     CategoryName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
