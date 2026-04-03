<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UpsertEntityInfo>|null $upsertEntitiesInfo
 * @property DeleteEntitiesInfo|null $deleteEntitiesInfo
 */
class InlinePayload extends Shape
{
    /**
     * @param array{
     *     upsertEntitiesInfo?: list<UpsertEntityInfo>|null,
     *     deleteEntitiesInfo?: DeleteEntitiesInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
