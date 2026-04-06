<?php

namespace Sunaoka\Aws\Structures\Macie;

class MacieClient extends \Aws\Macie\MacieClient
{
    use AssociateMemberAccount\AssociateMemberAccountTrait;
    use AssociateS3Resources\AssociateS3ResourcesTrait;
    use DisassociateMemberAccount\DisassociateMemberAccountTrait;
    use DisassociateS3Resources\DisassociateS3ResourcesTrait;
    use ListMemberAccounts\ListMemberAccountsTrait;
    use ListS3Resources\ListS3ResourcesTrait;
    use UpdateS3Resources\UpdateS3ResourcesTrait;
}
