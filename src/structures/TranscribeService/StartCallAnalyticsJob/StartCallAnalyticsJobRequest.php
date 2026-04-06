<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallAnalyticsJobName
 * @property Shapes\Media $Media
 * @property string|null $OutputLocation
 * @property string|null $OutputEncryptionKMSKeyId
 * @property string|null $DataAccessRoleArn
 * @property Shapes\CallAnalyticsJobSettings|null $Settings
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\ChannelDefinition>|null $ChannelDefinitions
 */
class StartCallAnalyticsJobRequest extends Request
{
    /**
     * @param array{
     *     CallAnalyticsJobName: string,
     *     Media: Shapes\Media,
     *     OutputLocation?: string|null,
     *     OutputEncryptionKMSKeyId?: string|null,
     *     DataAccessRoleArn?: string|null,
     *     Settings?: Shapes\CallAnalyticsJobSettings|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ChannelDefinitions?: list<Shapes\ChannelDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
