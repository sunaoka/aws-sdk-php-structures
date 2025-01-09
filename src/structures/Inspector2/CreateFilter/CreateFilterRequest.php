<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'SUPPRESS' $action
 * @property string $description
 * @property Shapes\FilterCriteria $filterCriteria
 * @property string $name
 * @property string $reason
 * @property array<string, string> $tags
 */
class CreateFilterRequest extends Request
{
    /**
     * @param array{
     *     action: 'NONE'|'SUPPRESS',
     *     description?: string,
     *     filterCriteria: Shapes\FilterCriteria,
     *     name: string,
     *     reason?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
