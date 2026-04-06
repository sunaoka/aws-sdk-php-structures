<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LayoutContent|null $content
 * @property string $domainId
 * @property string $layoutId
 * @property string|null $name
 */
class UpdateLayoutRequest extends Request
{
    /**
     * @param array{
     *     content?: Shapes\LayoutContent|null,
     *     domainId: string,
     *     layoutId: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
