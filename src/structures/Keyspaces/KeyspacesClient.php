<?php

namespace Sunaoka\Aws\Structures\Keyspaces;

class KeyspacesClient extends \Aws\Keyspaces\KeyspacesClient
{
    use CreateKeyspace\CreateKeyspaceTrait;
    use CreateTable\CreateTableTrait;
    use CreateType\CreateTypeTrait;
    use DeleteKeyspace\DeleteKeyspaceTrait;
    use DeleteTable\DeleteTableTrait;
    use DeleteType\DeleteTypeTrait;
    use GetKeyspace\GetKeyspaceTrait;
    use GetTable\GetTableTrait;
    use GetTableAutoScalingSettings\GetTableAutoScalingSettingsTrait;
    use GetType\GetTypeTrait;
    use ListKeyspaces\ListKeyspacesTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTypes\ListTypesTrait;
    use RestoreTable\RestoreTableTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateKeyspace\UpdateKeyspaceTrait;
    use UpdateTable\UpdateTableTrait;
}
