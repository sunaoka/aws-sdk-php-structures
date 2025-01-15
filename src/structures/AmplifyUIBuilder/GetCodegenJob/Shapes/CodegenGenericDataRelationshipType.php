<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_MANY'|'HAS_ONE'|'BELONGS_TO' $type
 * @property string $relatedModelName
 * @property list<string>|null $relatedModelFields
 * @property bool|null $canUnlinkAssociatedModel
 * @property string|null $relatedJoinFieldName
 * @property string|null $relatedJoinTableName
 * @property string|null $belongsToFieldOnRelatedModel
 * @property list<string>|null $associatedFields
 * @property bool|null $isHasManyIndex
 */
class CodegenGenericDataRelationshipType extends Shape
{
    /**
     * @param array{
     *     type: 'HAS_MANY'|'HAS_ONE'|'BELONGS_TO',
     *     relatedModelName: string,
     *     relatedModelFields?: list<string>|null,
     *     canUnlinkAssociatedModel?: bool|null,
     *     relatedJoinFieldName?: string|null,
     *     relatedJoinTableName?: string|null,
     *     belongsToFieldOnRelatedModel?: string|null,
     *     associatedFields?: list<string>|null,
     *     isHasManyIndex?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
