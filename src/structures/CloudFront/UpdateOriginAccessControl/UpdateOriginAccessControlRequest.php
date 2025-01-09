<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginAccessControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OriginAccessControlConfig $OriginAccessControlConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateOriginAccessControlRequest extends Request
{
    /**
     * @param array{
     *     OriginAccessControlConfig: Shapes\OriginAccessControlConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
