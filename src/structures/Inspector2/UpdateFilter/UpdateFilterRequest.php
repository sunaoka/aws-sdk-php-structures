<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'SUPPRESS'|null $action
 * @property string|null $description
 * @property string $filterArn
 * @property Shapes\FilterCriteria|null $filterCriteria
 * @property string|null $name
 * @property string|null $reason
 */
class UpdateFilterRequest extends Request
{
    /**
     * @param array{
     *     action?: 'NONE'|'SUPPRESS'|null,
     *     description?: string|null,
     *     filterArn: string,
     *     filterCriteria?: Shapes\FilterCriteria|null,
     *     name?: string|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
