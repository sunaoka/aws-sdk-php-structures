<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputLocation
 * @property string $DataAccessRoleArn
 * @property 'redacted'|'redacted_and_unredacted'|null $ContentRedactionOutput
 * @property string|null $OutputEncryptionKMSKeyId
 */
class PostCallAnalyticsSettings extends Shape
{
    /**
     * @param array{
     *     OutputLocation: string,
     *     DataAccessRoleArn: string,
     *     ContentRedactionOutput?: 'redacted'|'redacted_and_unredacted'|null,
     *     OutputEncryptionKMSKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
