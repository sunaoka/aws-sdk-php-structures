<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LayoutContent $content
 * @property string $domainId
 * @property string $name
 */
class CreateLayoutRequest extends Request
{
    /**
     * @param array{
     *     content: Shapes\LayoutContent,
     *     domainId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
