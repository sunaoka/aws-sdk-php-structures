<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\WriteApplicationSettingsRequest $WriteApplicationSettingsRequest
 */
class UpdateApplicationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     WriteApplicationSettingsRequest: Shapes\WriteApplicationSettingsRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
