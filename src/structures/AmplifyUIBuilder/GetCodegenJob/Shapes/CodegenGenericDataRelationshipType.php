<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_MANY'|'HAS_ONE'|'BELONGS_TO' $type
 * @property string $relatedModelName
 * @property list<string> $relatedModelFields
 * @property bool $canUnlinkAssociatedModel
 * @property string $relatedJoinFieldName
 * @property string $relatedJoinTableName
 * @property string $belongsToFieldOnRelatedModel
 * @property list<string> $associatedFields
 * @property bool $isHasManyIndex
 */
class CodegenGenericDataRelationshipType extends Shape
{
    /**
     * @param array{
     *     type: 'HAS_MANY'|'HAS_ONE'|'BELONGS_TO',
     *     relatedModelName: string,
     *     relatedModelFields?: list<string>,
     *     canUnlinkAssociatedModel?: bool,
     *     relatedJoinFieldName?: string,
     *     relatedJoinTableName?: string,
     *     belongsToFieldOnRelatedModel?: string,
     *     associatedFields?: list<string>,
     *     isHasManyIndex?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
