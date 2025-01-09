<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDimension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'TOPIC_FILTER' $type
 * @property list<string> $stringValues
 * @property list<Shapes\Tag> $tags
 * @property string $clientRequestToken
 */
class CreateDimensionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'TOPIC_FILTER',
     *     stringValues: list<string>,
     *     tags?: list<Shapes\Tag>,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
