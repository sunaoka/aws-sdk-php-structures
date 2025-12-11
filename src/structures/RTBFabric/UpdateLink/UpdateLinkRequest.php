<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property Shapes\LinkLogSettings|null $logSettings
 */
class UpdateLinkRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     logSettings?: Shapes\LinkLogSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
