<?php

namespace Sunaoka\Aws\Structures\Health\ConfigureTagsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property bool|null $enabledForEventBridge
 */
class TagKeyForOrganization extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     enabledForEventBridge?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
