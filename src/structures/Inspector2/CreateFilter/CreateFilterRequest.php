<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'SUPPRESS' $action
 * @property string|null $description
 * @property Shapes\FilterCriteria $filterCriteria
 * @property string $name
 * @property array<string, string>|null $tags
 * @property string|null $reason
 */
class CreateFilterRequest extends Request
{
    /**
     * @param array{
     *     action: 'NONE'|'SUPPRESS',
     *     description?: string|null,
     *     filterCriteria: Shapes\FilterCriteria,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
