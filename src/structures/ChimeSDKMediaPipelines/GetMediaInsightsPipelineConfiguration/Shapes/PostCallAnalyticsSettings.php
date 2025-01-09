<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputLocation
 * @property string $DataAccessRoleArn
 * @property 'redacted'|'redacted_and_unredacted' $ContentRedactionOutput
 * @property string $OutputEncryptionKMSKeyId
 */
class PostCallAnalyticsSettings extends Shape
{
    /**
     * @param array{
     *     OutputLocation: string,
     *     DataAccessRoleArn: string,
     *     ContentRedactionOutput?: 'redacted'|'redacted_and_unredacted',
     *     OutputEncryptionKMSKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
