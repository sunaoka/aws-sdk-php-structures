<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $layoutId
 * @property string|null $name
 * @property Shapes\LayoutContent|null $content
 */
class UpdateLayoutRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     layoutId: string,
     *     name?: string|null,
     *     content?: Shapes\LayoutContent|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
