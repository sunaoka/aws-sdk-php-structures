<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 * @property string|null $clientToken
 * @property Shapes\InputConfiguration $inputConfiguration
 * @property 'VOCABULARY' $entityType
 * @property 'UPSERT'|'DELETE' $operationType
 * @property Shapes\OutputConfiguration $outputConfiguration
 * @property Shapes\NotificationConfiguration|null $notificationConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class InvokeDataAutomationLibraryIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     libraryArn: string,
     *     clientToken?: string|null,
     *     inputConfiguration: Shapes\InputConfiguration,
     *     entityType: 'VOCABULARY',
     *     operationType: 'UPSERT'|'DELETE',
     *     outputConfiguration: Shapes\OutputConfiguration,
     *     notificationConfiguration?: Shapes\NotificationConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
