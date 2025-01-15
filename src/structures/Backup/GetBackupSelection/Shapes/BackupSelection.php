<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SelectionName
 * @property string $IamRoleArn
 * @property list<string>|null $Resources
 * @property list<Condition>|null $ListOfTags
 * @property list<string>|null $NotResources
 * @property Conditions|null $Conditions
 */
class BackupSelection extends Shape
{
    /**
     * @param array{
     *     SelectionName: string,
     *     IamRoleArn: string,
     *     Resources?: list<string>|null,
     *     ListOfTags?: list<Condition>|null,
     *     NotResources?: list<string>|null,
     *     Conditions?: Conditions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
