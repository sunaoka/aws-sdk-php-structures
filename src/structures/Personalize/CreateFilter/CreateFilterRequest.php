<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $datasetGroupArn
 * @property string $filterExpression
 * @property list<Shapes\Tag>|null $tags
 */
class CreateFilterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     datasetGroupArn: string,
     *     filterExpression: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
