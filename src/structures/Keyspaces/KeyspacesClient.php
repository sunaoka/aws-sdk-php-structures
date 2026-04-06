<?php

namespace Sunaoka\Aws\Structures\Keyspaces;

class KeyspacesClient extends \Aws\Keyspaces\KeyspacesClient
{
    use CreateKeyspace\CreateKeyspaceTrait;
    use CreateTable\CreateTableTrait;
    use DeleteKeyspace\DeleteKeyspaceTrait;
    use DeleteTable\DeleteTableTrait;
    use GetKeyspace\GetKeyspaceTrait;
    use GetTable\GetTableTrait;
    use GetTableAutoScalingSettings\GetTableAutoScalingSettingsTrait;
    use ListKeyspaces\ListKeyspacesTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RestoreTable\RestoreTableTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateTable\UpdateTableTrait;
}
