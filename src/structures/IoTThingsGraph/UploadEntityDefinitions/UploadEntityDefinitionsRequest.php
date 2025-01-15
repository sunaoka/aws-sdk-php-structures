<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UploadEntityDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DefinitionDocument|null $document
 * @property bool|null $syncWithPublicNamespace
 * @property bool|null $deprecateExistingEntities
 */
class UploadEntityDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     document?: Shapes\DefinitionDocument|null,
     *     syncWithPublicNamespace?: bool|null,
     *     deprecateExistingEntities?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
