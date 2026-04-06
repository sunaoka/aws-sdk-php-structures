<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendAnnouncement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Text>|null $TextList
 * @property list<Ssml>|null $SsmlList
 * @property list<Audio>|null $AudioList
 */
class Content extends Shape
{
    /**
     * @param array{
     *     TextList?: list<Text>|null,
     *     SsmlList?: list<Ssml>|null,
     *     AudioList?: list<Audio>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
