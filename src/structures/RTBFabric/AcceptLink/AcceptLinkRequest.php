<?php

namespace Sunaoka\Aws\Structures\RTBFabric\AcceptLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property Shapes\LinkAttributes|null $attributes
 * @property Shapes\LinkLogSettings $logSettings
 * @property int<100, 5000>|null $timeoutInMillis
 */
class AcceptLinkRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     attributes?: Shapes\LinkAttributes|null,
     *     logSettings: Shapes\LinkLogSettings,
     *     timeoutInMillis?: int<100, 5000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
