<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputConfiguration $InputConfiguration
 * @property Shapes\OutputConfiguration $OutputConfiguration
 * @property string|null $ProjectArn
 * @property list<Shapes\BlueprintItem>|null $Blueprints
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\NotificationConfiguration|null $NotificationConfiguration
 * @property array<string, string>|null $Tags
 */
class StartDocumentInsightsRequest extends Request
{
    /**
     * @param array{
     *     InputConfiguration: Shapes\InputConfiguration,
     *     OutputConfiguration: Shapes\OutputConfiguration,
     *     ProjectArn?: string|null,
     *     Blueprints?: list<Shapes\BlueprintItem>|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
