<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LayoutContent $content
 * @property string $domainId
 * @property string $layoutId
 * @property string $name
 */
class UpdateLayoutRequest extends Request
{
    /**
     * @param array{
     *     content?: Shapes\LayoutContent,
     *     domainId: string,
     *     layoutId: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
