<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UploadEntityDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DefinitionDocument $document
 * @property bool $syncWithPublicNamespace
 * @property bool $deprecateExistingEntities
 */
class UploadEntityDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     document?: Shapes\DefinitionDocument,
     *     syncWithPublicNamespace?: bool,
     *     deprecateExistingEntities?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
