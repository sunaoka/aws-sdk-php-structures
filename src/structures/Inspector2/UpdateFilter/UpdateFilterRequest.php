<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'SUPPRESS' $action
 * @property string $description
 * @property string $filterArn
 * @property Shapes\FilterCriteria $filterCriteria
 * @property string $name
 * @property string $reason
 */
class UpdateFilterRequest extends Request
{
    /**
     * @param array{
     *     action?: 'NONE'|'SUPPRESS',
     *     description?: string,
     *     filterArn: string,
     *     filterCriteria?: Shapes\FilterCriteria,
     *     name?: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
