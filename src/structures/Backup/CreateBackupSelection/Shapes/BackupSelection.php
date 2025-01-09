<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SelectionName
 * @property string $IamRoleArn
 * @property list<string> $Resources
 * @property list<Condition> $ListOfTags
 * @property list<string> $NotResources
 * @property Conditions $Conditions
 */
class BackupSelection extends Shape
{
    /**
     * @param array{
     *     SelectionName: string,
     *     IamRoleArn: string,
     *     Resources?: list<string>,
     *     ListOfTags?: list<Condition>,
     *     NotResources?: list<string>,
     *     Conditions?: Conditions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
