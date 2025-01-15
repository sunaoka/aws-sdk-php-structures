<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateEventTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $datasetGroupArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateEventTrackerRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     datasetGroupArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
