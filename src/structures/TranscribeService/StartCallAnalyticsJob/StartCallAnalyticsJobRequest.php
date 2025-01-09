<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallAnalyticsJobName
 * @property Shapes\Media $Media
 * @property string $OutputLocation
 * @property string $OutputEncryptionKMSKeyId
 * @property string $DataAccessRoleArn
 * @property Shapes\CallAnalyticsJobSettings $Settings
 * @property list<Shapes\ChannelDefinition> $ChannelDefinitions
 */
class StartCallAnalyticsJobRequest extends Request
{
    /**
     * @param array{
     *     CallAnalyticsJobName: string,
     *     Media: Shapes\Media,
     *     OutputLocation?: string,
     *     OutputEncryptionKMSKeyId?: string,
     *     DataAccessRoleArn?: string,
     *     Settings?: Shapes\CallAnalyticsJobSettings,
     *     ChannelDefinitions?: list<Shapes\ChannelDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
