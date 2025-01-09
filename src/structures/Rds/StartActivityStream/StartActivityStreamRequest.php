<?php

namespace Sunaoka\Aws\Structures\Rds\StartActivityStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'sync'|'async' $Mode
 * @property string $KmsKeyId
 * @property bool $ApplyImmediately
 * @property bool $EngineNativeAuditFieldsIncluded
 */
class StartActivityStreamRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Mode: 'sync'|'async',
     *     KmsKeyId: string,
     *     ApplyImmediately?: bool,
     *     EngineNativeAuditFieldsIncluded?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
